<div class="clear both"></div>
<div class="add-cat">
    <a class="fancybox add-cat" rel="nofollow" href="#">+</a>
</div>

<div id="titi" style="display:none;">
	<h2>Edit task </h2><br>
    <form method="post" action="" >
    	<label>
    		<span>Task Name:</span>
    		<input type="text" name="add-task-name" class="nameTaskUp" placeholder="Modifier une tache">
    	</label>
    	<label>
    		<span>End Type :</span>
                <select name="task-type" class="typeTask">
            <option value="0">Au plus tot</option>
            <option value="1">Date precise</option>
            <option value="2">Avant de mourir</option>
        </select>
    		<!-- <input type="text" name="task-type" class="typeTask" placeholder="Tache de la tache"> -->
    	</label>
    	<label>
    		<span>End Date:</span>
    		<input type="text" class="date_end" placeholder="Date" id="dpEdit" >

    	</label>
        <input type="submit" class="btnOkFormEdit" value="OK">
    </form>
   
    


</div>