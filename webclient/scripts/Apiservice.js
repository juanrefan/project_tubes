const dbVersion = "v2";
const genreCollection = "genre";
const bookCollection = "book";

class Apiservice{
    static get dbVersion(){
        return dbVersion;
    }

    static get genreCollection(){
        return genreCollection;
    }

    static get bookCollection(){
        return bookCollection;
    }
}