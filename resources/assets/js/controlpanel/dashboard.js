/**
 * Javascript Class to handle the Controlpanel Dashboard
 */
class Dashboard {

    constructor(params) {
        this.params = params;
        this.iniDashboard();
        this.initToken();
    }

    initToken(){
        let authorization = 'Bearer ' + this.params.access_token.replace(/\"/g, "");
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 'Authorization': authorization }});
    }

    iniDashboard() {

        $.ajax({
            url: "/api/v1/dashboard/get-totals",
            type: "get",
            dataType: "json",
            success: function(data){

                console.log(data);

                $('.total-question-type-metadata').html(data.totalAnswerTypeMetadata);
                $('.total-questions').html(data.totalQuestions);
                $('.total-answer').html(data.totalAnswer);
                $('.total-survey').html(data.totalSurvey);

            },
            error: function(err){}
        });


    }
}

export default Dashboard;
