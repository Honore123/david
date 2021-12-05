<div class="modal fade" id="newAgent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('agent.store')}}" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Agent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">User Type</label>
                        <select class="form-control" disabled>
                            <option value="">~~SELECT TYPE~~</option>
                            <option value="1" selected>Agent</option>
                            <option value="2">Petrol Station</option>
                        </select>
                        <input type="hidden" name="user_type" id="user_type" value="1">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-auto" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>
