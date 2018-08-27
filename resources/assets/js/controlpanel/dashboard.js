/**
 * Javascript Class to handle the Controlpanel Dashboard
 */
class Dashboard {

    constructor(params) {
        this.params = params;
        this.iniDashboard();
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
