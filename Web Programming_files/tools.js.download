/* Lecture 0: Grade Calculator */
function finalResult() {
  let scores = [
    document.getElementById('a1').value,
    document.getElementById('a2').value,
    document.getElementById('a3').value,
    document.getElementById('a4').value,
    document.getElementById('ex').value/2,
  ];
  console.log(scores);
  let total = 0;
  for (let i=0; i<scores.length; i++) {
    if (!isNaN(parseFloat(scores[i])))
      total += parseFloat(scores[i]);
  }
  document.getElementById('finalResult').innerHTML = Math.ceil(total)+'%';
}


/* Lecture 2: Multimedia, Canvas 
   Simulates a very crude paint program */
function canvasPaint(canvas,event) {
  var rect = canvas.getBoundingClientRect();
  var left = event.clientX - rect.left;
  var top = event.clientY - rect.top;
  var ctx = event.target.getContext("2d");
  var date = new Date();
  var hue = Math.round(date.getTime()/60)%360;
  var size = 2 + Math.round(date.getTime()/60)%11;
  console.log("size: %s hue: %s at (%d,%d)",size,hue,left,top);
  ctx.fillStyle = "hsl("+hue+",50%,50%)";
  ctx.beginPath();
  ctx.arc(left,top,size,0,2*Math.PI);
  ctx.fill();
}

/* Lecture 2: meter and progress */
var mpIX=0;
function mpTick() {
  if (++mpIX > 10) mpIX=0;
  document.getElementById('l2-meter').value=mpIX;
  document.getElementById('l2-progress').value=mpIX;
}
setInterval(mpTick, 1000);

/* Lecture 3: Color, Pixel Simulator 
   Simulates #RGB 4,092 colors, pixel and screen */
function pixelSimulator()
{
  var rNibble=Number($('#slider-r').val())
  var gNibble=Number($('#slider-g').val());
  var bNibble=Number($('#slider-b').val());
  var bright=rNibble+gNibble+bNibble;
  var rNibble=rNibble.toString(16).toUpperCase();
  var gNibble=gNibble.toString(16).toUpperCase();
  var bNibble=bNibble.toString(16).toUpperCase();
  var rColor='#'+rNibble+'00';
  var gColor='#0'+gNibble+'0';
  var bColor='#00'+bNibble;
  var rgbColor="#"+rNibble+gNibble+bNibble;
  //console.log('Color #%s%s%s Brightness #s',rNibble,gNibble,bNibble,bright);
  $('#pixel-r').css('background-color',rColor);
  $('#pixel-r').html(rColor);
  $('#pixel-g').css('background-color',gColor);
  $('#pixel-g').html(gColor);
  $('#pixel-b').css('background-color',bColor);
  $('#pixel-b').html(bColor);
  $('#pixel-rgb').css('background-color',rgbColor);
  $('#pixel-rgb').html(rgbColor);
  if (bright>24)
    $('#pixel-rgb').css('color','black');
  else
    $('#pixel-rgb').css('color','white');
}

/**
 * Converts an HSL color value to RGB. Conversion formula
 * adapted from http://en.wikipedia.org/wiki/HSL_color_space.
 * Converts h, s, and l from css hsl() into the set [0, 1] and
 * calculates r, g, and b in the set [0, 255].
 *
 */
function hsl2rgb(){
  //console.log('enter');
  var r, g, b, rgb, rColor, gColor, bColor, rgbColor;
  var h = $('#slider-h').val();
  var s = $('#slider-s').val();
  var l = $('#slider-l').val();
  hslColor='hsl('+h+', '+s+'%, '+l+'%)';
  var bright = (
    (h > 35 && h < 195) ? -15 : (
    (h > 210 && h < 285) ? 15 : 0   
  ));
  if (l>(50+bright)) 
    $('#pixel-hsl').css('color','black');
  else 
    $('#pixel-hsl').css('color','white');
  $('#pixel-hsl').html(hslColor);
  $('#pixel-hsl').css('background-color',hslColor);
  h = h/360;
  s = s/100;
  l = l/100;
  // console.log('HSL #%s,%s,%s',h,s,l);

  if(s == 0)
  {
    r = g = b = Math.round(l*255); // achromatic
  }
  else
  {
    var hue2rgb = function hue2rgb(p, q, t) {
      if(t < 0) t += 1;
      if(t > 1) t -= 1;
      var ret = (
        t < 1/6 ? p + (q - p) * 6 * t : (
        t < 1/2 ? q : (
        t < 2/3 ? p + (q - p) * (2/3 - t) * 6 : p
      )));
      return Math.round(ret*255);
    }
    var q = l < 0.5 ? l * (1 + s) : l + s - l * s;
    var p = 2 * l - q;
    r = hue2rgb(p, q, h + 1/3);
    g = hue2rgb(p, q, h);
    b = hue2rgb(p, q, h - 1/3);
  }
    rColor='rgb('+r+',0,0)';
    gColor='rgb(0,'+g+',0)';
    bColor='rgb(0,0,'+b+')';
    $('#pixel-r2').html(rColor);
    $('#pixel-g2').html(gColor);
    $('#pixel-b2').html(bColor);
    $('#pixel-r2').css('background-color',rColor);
    $('#pixel-g2').css('background-color',gColor);
    $('#pixel-b2').css('background-color',bColor);
}

/* Lecture 5: CSS Layout */
function toggleCenter(bP)
{  
  if (bP) {
    $('#demoboxmodel5').css('margin-left','auto');
    $('#demoboxmodel5').css('margin-right','auto');
  } else {
    $('#demoboxmodel5').css('margin-left','');
    $('#demoboxmodel5').css('margin-right','');    
  }
}

/* Lecture 5: Shadow Play */
function shadowPlay() {
  styleB = document.getElementById('shadow-inset').value;
  styleT = '';
  styleF = 'drop-shadow(';
  lf="</span>;\n";
  temp =
      document.getElementById('shadow-v').value +
      document.getElementById('shadow-h').value + document.getElementById('shadow-b').value;
  styleB += temp + document.getElementById('shadow-s').value;
  styleT += temp;
  styleF += temp;
  temp = document.getElementById('shadow-c').value;
  styleB += temp;
  styleT += temp;
  styleF += temp + ')';
  document.getElementById('demoshadow4').style.boxShadow=styleB;
  document.getElementById('shadow-text').style.textShadow=styleT;
  document.getElementById('shadow-img').style.filter=styleF;
  document.getElementById('shadowCSS').innerHTML=
    'box-shadow: <span>'+styleB+lf+
    'text-shadow: <span>'+styleT+lf+
    'filter: <span>'+styleF+'</span>;';
}

/* Lecture 5: CSS Sticky Postion */
function sticky(topbottomP) {
  if (topbottomP.includes('top'))
    $('#sticky img').css('top','0px');
  else
    $('#sticky img').css('top','');
  if (topbottomP.includes('bottom'))
    $('#sticky img').css('bottom','0px');
  else
    $('#sticky img').css('bottom','');
}

/* Lecture 6: Event Handling */
function inspectEvent() { 
  alert('Event of type "'+event.type+'" detected:\n- '+event.target.id+' (target = element that was clicked)\n- '+event.currentTarget.id+' (currentTarget = element making the call)\nView the console for more information');
  console.log(event);
}

/* Lecture 6: Case Block Demo */
function whichDay(thisP) { 
  var dayName=thisP.value;
  switch ( dayName ) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
      document.getElementById('thisDayL6').innerHTML='Weekday';
      break; 
    case "Saturday":
    case "Sunday":
      document.getElementById('thisDayL6').innerHTML='Weekend';
      break; 
    default:
      document.getElementById('thisDayL6').innerHTML='Invalid';
  }
}

/* Lecture 6: AudioExample sourced and adapted from https://jsfiddle.net/njb91z84/378/ */

var notes = [];
function twelveScale() {
  var oA = 440;
  // NB: Math error causes 13th note A+ to be larger than 880hz, +1 hack below
  for ( var freq = oA; freq < oA*2+1; freq *= Math.pow(2,1/12).toFixed(4) )   {
    notes.push(freq);
  }
  console.log(notes);
  notes.reverse();
  tempo = 16*100;
  playMelody();
}

// create web audio api context
var audioCtx = new (window.AudioContext || window.webkitAudioContext)();

function playMelody(){
  if (notes.length > 0){
    note = notes.pop();
    playNote(note,1000*256/tempo);
  }
}

function playNote(frequency, duration) {
  // create Oscillator node
  var oscillator = audioCtx.createOscillator();

  oscillator.type = 'sawtooth';
  oscillator.frequency.value = frequency; // value in hertz
  oscillator.connect(audioCtx.destination);
  oscillator.start();

  setTimeout(
    function(){
      oscillator.stop();
      playMelody();
    }, duration);
}

/* Lecture 7: Event Handling */
function calculatePrice() { 
  alert('6 items at $9 each is $42 ... in base 13');
}
function calculatePrice2() { 
  alert('6 items at $9 each is $54 ... in base 10');
}

var myButton = document.getElementById("price3");
document.getElementById("price2").onclick = calculatePrice2;
document.getElementById("price3").addEventListener("click", calculatePrice); 
document.getElementById("price3").addEventListener("click", calculatePrice2); 

/* Lecture 7: Emoji Timeout Animation */

var emojiTimer;

function animateEmojiToggle() {
  emojiTimer = (typeof emojiTimer == 'number')
    ? clearInterval(emojiTimer)
    : setInterval(animateEmoji, 500);
  console.log("Emoji Timer: "+typeof emojiTimer);
}
document.getElementById('emoji').onclick=animateEmojiToggle;

var emjInc=1;
var emjInd=0;
var emojis=['🙁','😐','🙂','😃','😆','🤣'];

function animateEmoji() {
  console.log("Emoji Index: "+emjInd);
  document.getElementById("emoji").innerHTML = emojis[emjInd];
  if (emjInd>=emojis.length-1)
    emjInc=-1;
  else if (emjInd<=0)
    emjInc=1;
  emjInd+=emjInc;
}

/* Lecture 7: Event Bubbling */
document.getElementById("ef-div").addEventListener("click", inspectEvent); 
document.getElementById("ef-span").addEventListener("click", inspectEvent); 
 
document.getElementById("cuteKitten").addEventListener("wheel", function(eP) {
  document.getElementById("purr").play();
  eP.preventDefault();
});

/* Lecture 7: Regex */
function isSteve(thisP) {
  var patt = /^Steve [a-zA-Z ]+$/;
  if (patt.test(thisP.value)) 
    document.getElementById('steveErrorL7').innerHTML='Hey '+thisP.value+'!';
  else
    document.getElementById('steveErrorL7').innerHTML='Please be a Steve';
}

function makeSteve(thisP) {
  var patt = /^(Stephen|Steven|Stephanie|Stephan|Stefanie)$/;
  thisP.value = thisP.value.replace(patt,"Steve");
}

function pwStr(thisP) {
  var patt2 = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(.{8,})$/; //(?=.*[A-Z]))
  if (patt2.test(thisP.value)) 
    document.getElementById('pwErrorL7').innerHTML="That's a good one!";
  else
    document.getElementById('pwErrorL7').innerHTML='Needs to be stronger ...';
}

/* Lecture 8: Encode / Decode with XXS */
function pwCap(thisP) {
  if (thisP.open) return;
  var favColor = prompt("Your session has expired. Re-enter your favorite color.");
  if (favColor.trim().length > 0) {
    document.getElementById('decode8').innerHTML="Ooops! I meant to ask you for your password. Oh well, at least I know your favorite color is "+favColor+".";
  } else {
    document.getElementById('decode8').innerHTML="The original HTML / Javascript! <i>Well done by the way, you passed the social engineering test!</i>";
  } 
}

// Lecture 10: Suburb Extract
// New API: https://ipinfo.io/developers
var suburbFound = false;
function whereAmI() {
  $('#yoursuburb').html('Searching for suburb ...');
  $.getJSON("https://ipinfo.io?token=533d0b428906fa", function(data, status) {
    if (!suburbFound || status=='success') {
      suburbFound=true;
      console.log(data);
      $('#yoursuburb').html("<a href='https://www.google.com.au/maps/preview/@"+data.loc+",15z' target='_blank'>"+data.city+" in "+data.region+"</a>");
    }
  });
}

/* More accurate version, but not served over https
var suburbFound = false;
function whereAmI() {
  $('#yoursuburb').html('{{Searching for suburb ...}}');
  $.getJSON("http://ip-api.com/json/49.177.187.118", function(data, status) {
    console.log(data);
    if (!suburbFound || status=='success') {
      suburbFound=true;
      $('#yoursuburb').html("<a href='https://www.google.com.au/maps/preview/@"+data.lat+","+data.lon+",15z' target='_blank'>"+data.city+" "+data.regionName+"</a>");
    }
  });
}
*/
