$('#toggle-box-checkbox').on('change', function(){
  if(this.checked){
    $('body').addClass('night');
  }else{
    $('body').removeClass('night');
  }
});





// run demo if in searchresult preview
function demo(){
    setInterval(function(){
      $("#toggle-box-checkbox").trigger('click');
    }, 1000);
}
if (document.location.pathname.indexOf('fullcpgrid')>-1){
  demo();
}
function day() {
    body.className = "lightSwitch";
};
function night() {
    body.className = "darkSwitch";    
};
function reset() {
    body.className = "";
};

$(function() {
    var button = $('input[type=button]');
    button.on('click', function() {
        button.not(this).removeAttr('disabled');
        $(this).attr('disabled', '');
    });
});