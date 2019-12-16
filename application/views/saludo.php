<div class="container">
    <form class="form-group" action="http://localhost/prueba-fernanda/index.php/tarea" method="post">
        <label for="task_name">Titulo</label>
        <input type="text" name="task_name" /><br />

        <label for="complete">Realizado</label>
        <select name="complete" id="complete">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Add task" />

    </form>
    
<hr>

<?php foreach ($resultados->result_array() as $entry): ?>

<h3>
    <?php echo $entry['task_name'];  ?>
</h3>

<?php endforeach ?>

</div>

<p>
    <?php echo json_encode($resultados->result_array()); ?>
</p>