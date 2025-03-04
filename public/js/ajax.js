class Ajax{
    constructor(token){
        this.token = token;
    }

    selectAjax(api, myCallback){
        const tomb = [];
        $.ajax({
            url: api,
            type: "GET",
            success: function (result) {
                result.forEach((element) => {
                    tomb.push(element)
                });
                myCallback(tomb);
            },
            error: function () {
                console.log("Sikertelen adatlekérés");
            }
        })
    }
    insertAjax(api, adat){
        adat._token = this.token;
        $.ajax({
            headers: {"X_CSRF_TOKEN": this.token},
            url: api,
            type: "POST",
            data: adat,
            success: function (result) {
                console.log(result)
            },
            error: function (result) {
                console.log(result);
            }
        });
    }
    deleteAjax(api, adat){
        
        $.ajax({
            url: api,
            type: 'DELETE',
            data: adat,
            success: function() {
                
            },
            error: function() {
                
            }
        });
    }

    
    
}