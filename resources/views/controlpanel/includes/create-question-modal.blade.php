<div class="modal fade" id="createQuestionModal" tabindex="-1" role="dialog" aria-labelledby="createQuestionModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="controls">
                    <form id="questionForm" role="form" class="needs-validation" novalidate action="javascript:;">
                        <div class="form-group">
                            <label for="question_text-name" class="col-form-label">Question Text:</label>
                            <input type="text" class="form-control" name="question_text" id="question_text" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a text.
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_mandatory"
                                   id="is_mandatory">
                            <label class="form-check-label" for="is_mandatory">
                                Mandatory
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="answer_structure_id">Answer Structure</label>
                            <select class="form-control" name="answer_structure_id" id="answer_structure_id" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3 entry" required>
                                <input type="text" name="answer_metadata[]" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-add" type="button">+ Add Option<span class="oi
                                    oi-plus"></span></button>
                                </div>
                                <div class="invalid-feedback">
                                    Please choose a text.
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="answer_type_metadata_id" id="answer_type_metadata_id">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="questionForm">Save
                    Question</button>
            </div>
        </div>
    </div>
</div>

@push('javascript')
@endpush
