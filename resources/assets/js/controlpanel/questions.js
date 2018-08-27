/**
 * Javascript Class to handle the Controlpanel Question
 */
class Questions {

    constructor(params) {
        this.params = params;
        this.initDatatable();
        this.formValidator();
        this.startAnswerTypeListener();
        this.populateAnswerStructures();
        this.startOptionMetadata();
    }


    initDatatable(){

        // Edit record
        $('#questions-table').on('click', 'a.editor_edit', function (e) {
            e.preventDefault();

            Questions.resetFormCreateQuestionModal();

            let id = $(this).closest('tr').children('td:first').text();

            if(parseInt(id) > 0){
                /**
                 * Get all information from ajax
                 */
                $.ajax({
                    url: "/api/v1/questions/get/" + id,
                    type: "get",
                    dataType: "json",
                    success: function(data){
                        Questions.populateQuestionForm(data);
                    },
                    error: function(err){}
                });
            }

            $('#id').val($(this).closest('tr').children('td:first').text());
        } );

        // Delete record
        $('#questions-table').on('click', 'a.editor_remove', function (e) {
            e.preventDefault();

            let id = $(this).closest('tr').children('td:first').text();
            id = parseInt(id);

            $('#questionId').val(id);

            if(parseInt(id) > 0){
                /**
                 * Get all information from ajax
                 */
                $.ajax({
                    url: "/api/v1/questions/get/" + id,
                    type: "get",
                    dataType: "json",
                    success: function(data){
                       $('#hasAnswer').val(data.question.hasAnswer);
                    },
                    error: function(err){}
                });
            }


        } );

        $('#questions-table').DataTable( {
            "ajax": this.params.questionListApiUrl,
            "columns": [
                { "data": "id" },
                { "data": "question_text" },
                { "data": "answer_structure.structure" },
                { "data": "answer_type_metadata_id" },
                { "data": "is_mandatory" },
                { "data": "created_at" },
                { "data": "updated_at" },
                {
                    data: null,
                    className: "center",
                    defaultContent: '<a href="" data-toggle="modal" data-target="#createQuestionModal"' +
                        ' class="editor_edit">Edit</a> / <a href=""' +
                        ' data-toggle="modal"' +
                        ' data-target="#deleteQuestionModal" class="editor_remove">Delete</a>'
                }
            ]
        } );
    }

    populateAnswerStructures(){
        $.ajax({
            url: "/api/v1/answers/structures/list",
            type: "get",
            dataType: "json",
            success: function(data){
                $.each(data, function(i,v){
                    $('#answer_structure_id').append('<option value="' + v.id + '">' + v.structure + '</option>');
                });
            },
            error: function(err){}
        });
    }

    startAnswerTypeListener(){

        $('#answer_structure_id').change(function(){
            // case is drop-down
            if($.inArray($(this).val(), ['4','5'] ) != -1){
                $('.entry').show();
                $('.entry').find('input').prop('required',true);
            }else{
                $('.entry').hide();
                $('.entry').find('input').removeAttr('required');
            }
        });

    }

    startOptionMetadata() {

        $('#createQuestionModal').on('shown.bs.modal', function (e) {

            if($('#has_answer').val() == 'true'){
                $('#createQuestionModal').modal('toggle');

                $('.notifications').html('<div class="alert alert-danger alert-dismissible fade show"' +
                    ' role="alert">\n' +
                    '<div class="message">This question cannnot be edited because there is answers' +
                    ' associated.</div>\n' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '</div>');
            }

        });

        $('#deleteQuestionModal').on('shown.bs.modal', function (e) {

            if($('#hasAnswer').val() == 'true'){
                $('#deleteQuestionModal').modal('toggle');

                $('.notifications').html('<div class="alert alert-danger alert-dismissible fade show"' +
                    ' role="alert">\n' +
                    '<div class="message">This question cannnot be deleted because there is answers' +
                    ' associated.</div>\n' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '</div>');
            }
        });

        $(document).on('click', '.btn-add', function(e)
        {
            e.preventDefault();
            var controlForm = $('.controls form:first'),
                currentEntry = $(this). parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);

            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('Remove');

        }).on('click', '.btn-remove', function(e)
        {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
        });
    }

    formValidator(){
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }else{

                    // Call ajax form Submit
                    Questions.submitForm();
                }

                form.classList.add('was-validated');

            }, false);
        });
    }

    static populateQuestionForm(data){

        $("#id").val(data.question.id);
        $("#answer_type_metadata_id").val(data.question.answer_type_metadata_id);
        $('#question_text').val(data.question.question_text);
        $('#is_mandatory').prop('checked', data.question.is_mandatory == 1);
        $('#answer_structure_id').val(data.question.answer_structure_id);
        $('#has_answer').val(data.question.hasAnswer);


        if($.inArray(data.question.answer_structure_id, [4, 5]) != -1){
            $('.entry').show();
            $('.entry').find('input').prop('required',true);
        }else{
            $('.entry').hide();
            $('.entry').find('input').removeAttr('required');
        }

        // Populate the Metadata
        if (data.question.answer_type_metadata){
            $.each(data.question.answer_type_metadata.items, function(i, v){
                $('input[name="answer_metadata[]"]:nth('+i+')').val(v.value);
                if(i < data.question.answer_type_metadata.items.length-1){
                    $('.btn-add').click();
                }
            });
        }
    }

    static submitForm(){

        $.ajax({
            type: "post",
            url: '/api/v1/questions/create',
            data: $("#questionForm").serialize(), // serializes the form's elements.
            success: function(data)
            {
                $('#createQuestionModal').modal('toggle');
                $('#questions-table').DataTable().ajax.reload();

                if(data.status){
                    $('.notifications').html('<div class="alert alert-success alert-dismissible fade show"' +
                        ' role="alert">\n' +
                        '<div class="message">New Question added/updated successfully.</div>\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</div>');
                }else{
                    $('.notifications').html('<div class="alert alert-danger alert-dismissible fade show"' +
                        ' role="alert">\n' +
                        '<div class="message">Error adding question.</div>\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</div>');
                }
            }
        });

    }

    static resetFormCreateQuestionModal(){
        $('#id').val('');
        $('.btn-remove').parent().parent().remove();
        $('#questionForm')[0].reset();
        $('#questionForm').removeClass('was-validated');
        $('.entry').hide();
    }

    static delete(id){

        $.ajax({
            url: "/api/v1/questions/delete/" + id,
            type: "delete",
            dataType: "json",
            data: {questionId:id},
            success: function(data){

                $('#deleteQuestionModal').modal('toggle');
                $('#questions-table').DataTable().ajax.reload();

                if(data.status){
                    $('.notifications').html('<div class="alert alert-success alert-dismissible fade show"' +
                        ' role="alert">\n' +
                        '<div class="message">The question was deleted.</div>\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</div>');
                }else{
                    $('.notifications').html('<div class="alert alert-danger alert-dismissible fade show"' +
                        ' role="alert">\n' +
                        '<div class="message">The question could not be deleted.</div>\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</div>');
                }
            },
            error: function(err){}
        });
    }
}

export default Questions;
