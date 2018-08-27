<!-- Modal -->
<div class="modal fade" id="deleteQuestionModal" tabindex="-1" role="dialog"
     aria-labelledby="deleteQuestionModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this question?
            </div>
            <div class="modal-footer">
                <input type="hidden" name="questionId" id="questionId">
                <input type="hidden" name="hasAnswer" id="hasAnswer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="Questions.delete($('#questionId').val())
">Delete</button>
            </div>
        </div>
    </div>
</div>
