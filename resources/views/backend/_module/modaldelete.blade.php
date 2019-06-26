
  <!-- Modal -->
  <div 
    {{-- class="modal fade" id="{{ $modal }}" role="dialog" --}}
      class="modal fade" id="{{ $modal }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <h3><span style="color:red">{{ $modal_title }}  ?</span> </h3>
        </div>
        <div class="modal-footer">
          <form action="{{ $url_delete }}" id="deleteSave{{ $modal_id }}" method="post">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <a href="javascript:void(0)" onclick="submitDelete({{ $modal_id }})" class="btn btn-danger">Delete</a>
          </form>
        </div>
      </div>
      
    </div>
  </div>