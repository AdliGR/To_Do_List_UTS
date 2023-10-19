<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username'])) 
{
    $username = $_SESSION['username'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        foreach ($_POST as $key => $value) 
        {

            if (strpos($key, 'task_done_') === 0) 
            {
                $task_id = substr($key, strlen('task_done_'));
                $task_done_value = $value ? 1 : 0;
                $sql = "UPDATE tasks SET task_done = :task_done WHERE id = :task_id AND username = :username";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':task_done', $task_done_value, PDO::PARAM_INT);
                $stmt->bindParam(':task_id', $task_id, PDO::PARAM_INT);
                $stmt->bindParam(':username', $username);
                $stmt->execute();
            }
    
            if (strpos($key, 'progress_status_') === 0) 
            {
                $task_id = substr($key, strlen('progress_status_'));
                $progress_status = $value;
                $sql = "UPDATE tasks SET progress_status = :progress_status WHERE id = :task_id AND username = :username";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':progress_status', $progress_status, PDO::PARAM_STR);
                $stmt->bindParam(':task_id', $task_id, PDO::PARAM_INT);
                $stmt->bindParam(':username', $username);
                $stmt->execute();
            }
        }
    }
    
    $sql = "SELECT id, task_text, task_done, progress_status FROM tasks WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $tasks = [];

    if ($stmt->rowCount() > 0) 
    {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
        {
            $tasks[] = [
                'id' => $row["id"],
                'task_text' => $row["task_text"],
                'task_done' => $row["task_done"],
                'progress_status' => $row["progress_status"]
            ];
        }
    }
} 

$conn = null;
?>

<tbody>
    <form method="post">
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?= $task['task_text'] ?></td>
                <td>
                <!--Checkbox Masih Error-->
                <input type="checkbox" name="task_done_<?= $task['id'] ?>"
                    value="1"
                    <?= $task['task_done'] ? 'checked' : '' ?>
                    onchange="updateTaskDone(this, <?= $task['id'] ?>);">
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control text-center" name="progress_status_<?= $task['id'] ?>" onchange="updateProgress(this, <?= $task['id'] ?>);">
                            <option value="Not yet started" <?= $task['progress_status'] === 'Not yet started' ? 'selected' : '' ?>>Not yet started</option>
                            <option value="In progress" <?= $task['progress_status'] === 'In progress' ? 'selected' : '' ?>>In progress</option>
                            <option value="Waiting on" <?= $task['progress_status'] === 'Waiting on' ? 'selected' : '' ?>>Waiting on</option>
                        </select>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</tbody>


<script>

            //function ini masih error
            function updateTaskDone(checkbox, taskId) 
                {
                var taskForm = checkbox.form;
                taskForm['task_done_' + taskId].value = checkbox.checked ? '1' : '0';
                taskForm.task_id.value = taskId;
                taskForm.submit();
                }


    function updateProgress(select, taskId) 
    {
        var progressStatus = select.value;
        var taskForm = select.form;
        taskForm.task_id.value = taskId;
        taskForm.progress_status.value = progressStatus;
        taskForm.submit();
    }

</script>
