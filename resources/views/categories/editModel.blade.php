<div class="modal fade" id="Edit-Modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit catigory</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('Category.update') }}" method="post">
            @csrf
            @method('put')
            @method('post')
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <lable class="form-lable">Catigory Name</lable>
                        <input type="text" class="form-control" name="CatName" value="{{$item->name}}"
                    </div>
                    <div class="col-6">
                        <lable class="form-lable">Catigory description</lable>
                        <textarea name="CatDesc" id="" cols="30" class="form-control">{{$item->description}}"</textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-clos" aria-label="Cloes"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </div>
        </form>
    </div>
</div>
</div>
