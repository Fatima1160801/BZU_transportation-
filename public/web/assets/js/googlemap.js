
 function initMap()
{
    function mapDisplay(datas){
        //map options
        var options={
            center: {lat: Number(datas[0].coords_lat), lng: Number(datas[0].coords_lng) },
            zoom:10
        }
        //create a map object and specify the DOM element for display.
        var map = new google.maps.Map(mapElement , options);
        var marker =new Array();
        for( let index =0; index< datas.length; index++){
            marker.push({
                coords:{
                    lat: Number(datas[index].coords_lat), lng: Number(datas[index].coords_lng)},
                //iconImage:'https://maps.google.com/mapfiles/kml/shapes/',
                content: `<div><h5> ${datas[index].location_title}<p><i class=""icon adress-icon></i>${datas[index].addressline1}</p><p>${datas[index].addressline2}, ${datas[index].city}</p> <small>${datas[index].location_email}</small></h5></div>`
            })
        }
        //loop through marker
        for(var i=0; i<marker.length;i++){
            addMarker(markers[i]);


        }


        function addMarker(proos){
            var marker = new google.maps.Marker({

                position :proos.coords,
                map:map
            });
            if(proos.iconImage){
                marker.setIcon(proos.iconImage);
            }
            if(proos.content){
                var infowindow=new google.maps.Infowindow({
                    content:proos.content
                });
                marker.addListener('click' , function(){
                    infowindow.open(map,marker);
                });
            }









        }


    }
}
