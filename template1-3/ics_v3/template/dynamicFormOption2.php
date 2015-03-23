<div class='containerForm'>
                       
        <div class='cfHeader'>
            <div>Form HTML</div>
            <div><label class='checkbox'><input type='checkbox'>Open in new window</label></div>
        </div>
        <div class='cfContent'>
            <textarea id="mcFormInfusionsoft" class="form-control" rows="5"></textarea>
        </div>
</div>
    <div class="bottomCheckBox">
        <label class='checkbox'><input id='disablename' type='checkbox'>Disable Name</label>
    </div>
    <div class='parentForm'>
    	 <div class='containerForm'>

            <div class='cfContent'>
				<button id="populate" value="populate">populate</button>                
            </div>
        </div>


        <div class='containerForm'>
            <div class='cfHeader'>Name</div>
            <div class='cfContent'>
                <select id="nameField1" class='form-control'><option>Choose Your Form</option></select>
            </div>
        </div>
        <div class='containerForm'>
            <div class='cfHeader'>Name Field Order</div>
            <div class='cfContent'><input id='nameFieldOrder' class='input-mini' type='text' placeholder='0'></div>
        </div> 
    </div>
    <div class="bottomCheckBox">
        <label class='checkbox'><input id='nameRequired' type='checkbox'>Name Required</label>
    </div> 

    <div class='parentForm'>
        <div class='containerForm'>
            <div class='cfHeader'>Email</div>
            <div class='cfContent'>
                <select id='emailField1' class='form-control'><option>Choose Your Form</option></select>
            </div>
        </div>

        <div class='containerForm'>
            <div class='cfHeader'>Email field Order</div>
            <div class='cfContent'>
                <input id='emailFieldOrder' class='input-mini' type='text' placeholder='0'>
            </div>
        </div>
    </div>

    <div class='containerForm'>
        <div class='cfHeader'>Method</div>
        <div class='cfContent'>
            <select id='method' class='form-control'><option>POST</option><option>GET</option></select>
        </div>
    </div>
    <div class='containerForm'>
        <div class='cfHeader'>Form URL</div>
        <div class='cfContent'>
            <input id='formURLField1' class='input-block-level' type='text' placeholder=''>
        </div>
    </div>
<script>
    $("#extraFields").hide();
    $("#addExtraFields").click(function(){
        $.ajax({type:'POST',url:'template/extraFields2.html',dataType:'html',success:function(data){$("#extraFields").append(data);}});
        $("#extraFields").show();
    });
</script>
<div class="containerForm">
    <div class='cfHeader'>Extra Fields</div>
    <div class='cfContent'>
        <div id='extraFields'></div>
        <button id='addExtraFields' type="button" class="btn btn-primary">Add new</button>
    </div>
</div>