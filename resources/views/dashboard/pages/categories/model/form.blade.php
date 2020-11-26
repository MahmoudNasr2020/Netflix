
<div class="modal fade" id="dapartment_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form id='department-form'>
      <div class="modal-body">

                  	<div class="card-body row">
					<div class="col-lg-12 p-t-20">
						<div
							class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="text" id="departmentName" name="name">
							<label class="mdl-textfield__label">Department Name</label>
                        </div>
                        <div id="name_error"></div>
					</div>
                </div>
                <input type="hidden" name="id" value="" id="id">
                <input type="hidden" name="type" value="" id="type">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="mdl-button btn-pink">save</button>
      </div>
       </form>
    </div>
  </div>
</div>
