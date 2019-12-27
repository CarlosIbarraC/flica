const READY_STATE_COMPLETE = 4, STATUS_OK = 200;
var btn = document.querySelector('#btnprueba');
var myNavigator = ()=>{
    let nav =(window.XMLHttpRequest)? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    return nav;
}
var setRequest = (callback,route,data)=>{
    let req = myNavigator();
    data= JSON.stringify(data);
    req.onreadystatechange = callback;
    req.open('POST',route,true);
    req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    req.send('data='+ data);
} 
btn.addEventListener('click',function(){
    let route = 'reciboDatos.php',
    data={ "remision": "remision",
        "nombre":" nombre_cliente",
        "producto": "select",
       " precio": "precio",
       "cantidad": "cantidad",
       "subtotal": "subtotal",
        "totales": "totales"}
    setRequest(function(){
          if(this.readyState== READY_STATE_COMPLETE){
              if(this.status == STATUS_OK){
                 let json_data = JSON.parse(this.responseText);
                 console.log(json_data);

              }else{
                  console.log(this.status);
              }
          }
    },route,data)
});