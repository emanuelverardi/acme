/**
 * Javascript Class to handle the Controlpanel Dashboard
 */
class AuthApi {

    constructor(params) {
        this.params = params;
        this.initToken();
    }

    initToken(){
        let authorization = 'Bearer ' + this.params.access_token.replace(/\"/g, "");
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 'Authorization': authorization }});
    }
}

export default AuthApi;
