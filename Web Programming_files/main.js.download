// 20171102: search is disappearing with new spring back - setting a kludge variable (debug or fix, not sure yet)
var kludgeSpringBack=false;

/* Taken from https://css-tricks.com/snippets/javascript/htmlentities-for-javascript/
   Used by search function - double quote coversion turned off for the moment */
function htmlEntities(str) {
  return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  // snipped off: .replace(/"/g, '&quot;');
}

// Connect search with slides. Restores previous slides after abandoned search
// 20170702: Implementing pre-search bookmark to return user to the slide that they were on when the search is complete. yBookmark set to -1 as search resets pageYOffet to zero when a search is in place (ie my first choice) 
var yBookmark = -1;
function search(qP)
{
  // 20171102: debug hiding scroll bar

  //console.log(qP);
  //console.log(window.pageYOffset);
  var sText=qP.toLowerCase();
  if (sText.length>=1)
  {
    if (yBookmark == -1) {
      yBookmark = window.pageYOffset;
      console.log('Set Bookmark: '+yBookmark);
    }
    // 20171102: see top line of file
    $( "main article > section" ).each(function(index)
    {
      var slideText=$( this ).text().toLowerCase();
      if (slideText.indexOf(sText) >-1 )
      {
        $( this ).show();
        // console.log(sP+' '+slideText.indexOf(sP)+': '+slideText);
      }
      else
      {
        $( this ).hide();
      }
    });
    $( "main article" ).each(function(index){
      if ($( this ).text().toLowerCase().indexOf(sText) >-1 )
        $( this ).show(500);
      else
        $( this ).hide(500);
    });
  }
  else
  {
    $( "main article section" ).show();
    $( "#instructions, nav input[type=checkbox]" ).each(function(index){
      var id='#slides-'+$(this).attr('id');
      var checked=$(this).prop('checked');
      if (checked)
        $(id).show();
      else
        $(id).hide();
    });
    if (yBookmark > 0) {
      console.log('Return Bookmark: '+yBookmark);    
      // Need time for page content to "spring back"
      setTimeout(function() {
        window.scrollTo(0,yBookmark);
        yBookmark = -1;
      },1);
    }
  }
}


// Ensures smooth scrolling when fixing main nav to top of screen by adding replacement space equal to size of navigation under the heading
var lastScrollY=0; // Will be updated by scroll events
// 20160722: Falk annoyed by flittering nav and footer. Introducing multiple scroll trigger
// 20171102: Glitch fix: above feature disabled when search box has focus
var scrollTick=0
var scrollTrigger=3;
window.onscroll = function() {
// 20171102: debug hiding scroll bar
  var currentScrollY = window.pageYOffset;
  // currentScrollY may have changed, get fresh position
  lastScrollY = window.pageYOffset;
};

// 20190309: Simplify nav / footer visiblility toggle
  function navFooterOpacity() {
    nav = document.getElementById('nav');
    if (nav.style.display == '' || nav.style.display == "block") {
      $('#nav, #footer, #discord, #ytChats, #printDoc').css('display','none')
      event.target.style.opacity=0.2;
      event.target.innerHTML="All"
    } else {
      $('#nav, #footer').css('display','block')
      $('#discord, #ytChats, #printDoc').css('display','inline-block')
      event.target.style.opacity=1;
      event.target.innerHTML="Slides Only"
    }
  }

// Font size adjust
function fontResize(event)
{
  var sVal=event.target.value;
  $('#zoomBig, #zoomSmall').css('background-color','rgba(0, 0, 0, 0)');
  if (sVal<0)
    $('#zoomSmall').css('background-color','#BBD6F3');
  else if (sVal>0)
    $('#zoomBig').css('background-color','#BBD6F3');
  var size = (Math.round(100*Math.pow(1.2,sVal))/100)+'em';
  event.target.title=size;
  $('body > main').css('font-size',size);
  console.log("Slider value: %s and <main> font-size %s",sVal,size);
}

// Trev Tryit Editor
var tryItBufferString;
function tryItBuffer (sP)
{
  // console.log(sP);
  tryItBufferString=sP;
}

/* Lightweight modal window - adapted from raventools.com
   Part 1: Activates overlay with content from hidden portion of a modal-block */
function overlay(event) {
  var el = document.getElementById('overlayTR');
  var ec = document.getElementById('overlayContent');
  ec.innerHTML=$(event.currentTarget).next().html();
  // console.group("Modal Prep");
  // console.log("ec contains '%s' and event contains %s", ec.innerHTML, event.currentTarget.innerHTML);
	el.style.display = "block";
  $( "#overlayContent > div:last-child" ).on('click',underlay);
}
// Part 2: Deactivates overlay, removes content.
function underlay(event) {
  // console.log('underlay');
  var el = document.getElementById('overlayTR');
  var ec = document.getElementById('overlayContent');
  ec.innerHTML='';
	el.style.display = "none";
}
