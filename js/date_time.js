function getDate(){
    return(formatDate(new Date));
}
function formatDate(date) {

    var dd = date.getDate();
    if (dd < 10) dd = '0' + dd;
  
    var mm = date.getMonth() + 1;
    if (mm < 10) mm = '0' + mm;
  
    var yy = date.getFullYear();
    
    return yy + '-' + mm + '-' + dd;
}