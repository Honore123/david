<div class="modal fade" id="newClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('client.store')}}" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Card No.</label>
                        <input class="form-control" type="text" id="card_uid" name="card_uid" value="{{old('card_uid')}}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Phone Number</label>
                        <input class="form-control" type="number" id="phone_number" name="phone_number" value="{{old('phone_number')}}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Balance</label>
                        <input class="form-control" type="number" id="balance" name="balance" value="0">
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
