const addNewGenre = (param1) => {
    let newGenre = {
        name:param1
    }
    firebase.database().ref(Apiservice.dbVersion).child(Apiservice.genreCollection).push(newGenre);
    document.getElementById("FormGenre").reset();
}

const getAllGenres = (callback) => {
    let db = firebase.database().ref(Apiservice.dbVersion).child(Apiservice.genreCollection);
    db.on("value",function(snap){
        if(snap.exist()){
            let genres = [];
            snap.forEach(function(childSnap){
                let genre = {
                    "id":childSnap.key,
                    "name":childSnap.val().name
                }
                genres.push(genre);
            });
            callback(genres);
        }
    });
}