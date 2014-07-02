function get_image_offset(e, id)
{
  debugger;
  offset_x = e.offsetX ? e.offsetX : e.pageX-document.getElementById(id).offsetLeft;
  offset_y = e.offsetY ? e.offsetY : e.pageY-document.getElementById(id).offsetTop;

  magnify(document.getElementById(id));
}

function magnify(elmnt)
{
  //check if the element exists; if it does not - create it
  if(!document.getElementById('magnifier'))
  {
    //create the div that will hold the magnifier
    var magnifier = document.createElement('div');
    magnifier.id = 'magnifier';
    magnifier.style.width = magnifier_settings['widht'];
    magnifier.style.height = magnifier_settings['height'];
    magnifier.style.overflow = 'hidden';
    magnifier.style.border = '2px solid #000';
    magnifier.style.position = 'relative';

    //magnified image. The original image is used to create the new one, which means that this function 
    //will work on any number of images on the same page, without the need to declare them or anything else..
    var magnifier_img = document.createElement('img');
    magnifier_img.id = 'magnifier_img';
    magnifier_img.src = elmnt.src;
    magnifier_img.width = parseInt(elmnt.width)*magnifier_settings['zoom_level'];
    magnifier_img.height = parseInt(elmnt.height)*magnifier_settings['zoom_level'];
  }

  else 
  {
    //if the element already existst we don't need to recreate it. Just declare the same variables, as used when creating the elements. 
    //This saves a lot of work for the browser and makes the script run smoother even on older PCs
    var magnifier = document.getElementById('magnifier');
    var magnifier_img = document.getElementById('magnifier_img');
  }

  //Adjust the magnifier position. Basically, it is set to the offset of the cursor plus a random value(i use 25) 
  //that will move the magnifier a little bit to the right  bottom of the page. This is used with two purposes: 
  //1. the magnifier will not pop over the cursor, so the user will actually see what will be magnified :)
  //2. this resolves an issue with the onmouseover trigger of the original image. If the value is not altered by 25, 
  //the instant when the magnifier is displayed, a onmouseout event is triggered on the original image, cause 
  //the mouse is now over the magnifier and not the original image. This causes the magnifier to be destoyed 
  //and in general is quite the oposite of what we want, cause this adds a big load to the client machine.
  //The top value is altered by the elements height, cause if the image is not at the top of the page,  
  //the magnifier will be misplaced somewhere above the image
  magnifier.style.left = offset_x+25;
  magnifier.style.top = offset_y+25-elmnt.height; 

  //Put negative margins to the magnified image, so the will show at the right place in the magnifier div
  magnifier_img.style.marginLeft = '-'+offset_x*magnifier_settings['zoom_level']+'px';
  magnifier_img.style.marginTop = '-'+offset_y*magnifier_settings['zoom_level']+'px';


  //Check again, if the magnifier is not created, cause if it's not we need to append it to the page elements
  if(!document.getElementById('magnifier'))
  {
    magnifier.appendChild(magnifier_img);

    //The only way I figured this magnification thing would work is using an image 'holder', which is a div 
    //with the same id as the  element plus the part '_holder'.
    var id = elmnt.id+'_holder';

    document.getElementById(id).appendChild(magnifier);
  }
}

//Removes the magnifier from tha page. This can be changed to just alter the magnifier's display property to 'none'
//or visibility to 'hidden', but i figured removing it is the most appropriate way
function hide_magnifier(id)
{
  id += '_holder';

  if(document.getElementById('magnifier'))
  document.getElementById(id).removeChild(document.getElementById('magnifier'));

}