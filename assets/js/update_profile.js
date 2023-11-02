/*
function for data to be edited inline
*/
function editData(event) {
    const btn = $(event.target);
    const editEl = "#" + btn.data("edit");
     $(editEl).removeAttr("readonly").addClass("form-control-focus").focus(); //make data editable
    
    //save function to revert line back to original state and persist data
    let save = function(){
    $(editEl).attr("readonly", "").removeClass("form-control-focus"); //undo in-focus changes
      //persist data
    };
      
    $(editEl).blur(save); //register save when line out of focus
    
  }
  
  /*
  function for data to be edited in a popped up form
  */
  function showForm(event) {
    //create variables
    const btn = $(event.target);
    const tagClicked = btn.prop("tagName").toLowerCase();
    const editFor = "#" + btn.data("for");
    const editForm = "#" + btn.data("form");
    const cancelBtn = editForm + "-cancel";
    const saveBtn = editForm + "-save";
    
    //display edit form, hide the button and present data
    $(editForm).removeClass("d-none");
    $(editFor).addClass("d-none");
    if (tagClicked == "i") {
      btn.parent().addClass("d-none");
    } else {
      btn.addClass("d-none");
    }
    
    //un-hide the hidden button and data, hide the edit form
    let revert = function() {
      $(editForm).addClass("d-none");
      $(editFor).removeClass("d-none");
      btn.parent().removeClass("d-none"); 
      btn.removeClass("d-none");
    };
    
    let cancel = function() {
      revert();
    };
    let save = function() {
      revert();
      //persist
    };
    
    $(cancelBtn).click(cancel);
    $(saveBtn).click(save);
    
  }
  
  for (const child of document.querySelectorAll(".edit-inline")) {
    child.onclick = editData;
  }
  
  for (const child of document.querySelectorAll(".edit-inform")) {
    child.onclick = showForm;
  }
  
  
  
  

// Add an event listener to the "Save" button in the work edit form



