/************** Document on ready ... *****************/
$(function() {

/* 20160604: check for bookmarks in localStorage */
  if (localStorage['slides-instructions']=='false') {
    $('#instructions').prop('checked',false);
    $('#slides-instructions').css('display','none');
  } else { 
    $('#instructions').prop('checked',true);
    $('#slides-instructions').css('display','block');    
  }
  for (lec=0; lec<=11; lec++) {
    if (localStorage['slides-lecture-'+lec]=='true') {
      $('#lecture-'+lec).prop('checked',true); 
      $('#slides-lecture-'+lec).css('display','block');
    } else {
      $('#lecture-'+lec).prop('checked',false); 
      $('#slides-lecture-'+lec).css('display','none');
    }
  }

// 20161115: Wiring up $_GET['q'] to perform search on load 
  if ( $('#search').val().length > 0 ) 
    search($('#search').val());
  
// Connect nav toggle buttons with slide sets
  $( ".buttonset" ).buttonset();
  $( "nav input[type=checkbox]" ).click(function(){
    var id='slides-'+$(this).attr('id');
    var checked=$(this).prop('checked');
    console.log(id+' = '+checked);
    if (checked)
    {
      $('#'+id).show(200);
      localStorage[id]='true';
    }
    else
    {
      $('#'+id).hide(200);
      localStorage[id]='false';
    }
    console.log(localStorage);
  });

// Trev Try it Functionality
  $( ".trev-tryit input[type=button]" ).click( function () {
    var source = $(this).parent().find("textarea").first().val();
    // console.log(source);
    var myWindow = window.open("", "TryIt" );
    myWindow.document.open("text/html", "replace");
    myWindow.document.write(source);
  });

// Trev Modal Window
  $( ".modal-block div:first-child" ).on('click',overlay);
  
// Draggable https://jqueryui.com/draggable/
  $( ".draggable" ).draggable();

// Lecture 6: Events  
  $('#mouseEventClick').on('click',function() {
    console.log('mouse click');
    console.log(event);
  });  
  $('#mouseEventDblClick').on('dblclick',function() {
    console.log('mouse dblclick');
    console.log(event);
  });  
  $('#mouseEventDown').on('mousedown',function() {
    console.log('mouse down');
    console.log(event);
  });  
  $('#mouseEventUp').on('mouseup',function() {
    console.log('mouse up');
    console.log(event);
  });  
  $('#mouseEventOver').on('mouseover',function() {
    console.log('mouse over');
    console.log(event);
  });  
  $('#mouseEventOut').on('mouseout',function() {
    console.log('mouse out');
    console.log(event);
  });  
  $('#mouseEventMove').on('mousemove',function(event) {
    console.log('mouse move');
    console.log(event);
  });  
  $('#keyPress').on('keypress',function() {
    console.log('key press');
    console.log(event);
  });  
  $('#keyDown').on('keydown',function() {
    console.log('key down');
    console.log(event);
  });  
  $('#keyUp').on('keyup',function(event) {
    console.log('key up');
    console.log(event);
  });  

// Lecture 7: Multiple Event Listeners  

/* Sortable
  $(function() {
    $( "#'', #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  }); */

});
