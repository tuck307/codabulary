
function sortBooks (name) {
    $('.books li').sort(function(a,b) {
         return $(a).find(".cbp-vm-" + name).text() > $(b).find(".cbp-vm-" + name).text();
    }).appendTo('.books');
};

$('#cbp-vm .dropdown-menu li a').click(function(e){
   sortBooks(this.innerHTML);
});