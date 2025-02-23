<div class="action-holder d-flex gap-3 align-items-center rounded-3 p-2 h-50 {{ $class ?? '' }}">
    <form action="{{ $editRoute }}" method="GET">
        @csrf
        <button type="submit" class="border-0 bg-transparent text-white p-0">
            <i class="fa-solid fa-edit fs-5"></i>
        </button>
    </form>
    <button type="button" data-bs-toggle="modal" data-bs-target="#{{ $itemId }}" class="border-0 bg-transparent text-white p-0" onclick="event.stopPropagation()">
        <i class="fa-solid fa-trash fs-5"></i>
    </button>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="{{ $itemId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog h-75 d-flex align-items-center">
        <div class="modal-content w-75 mx-auto p-4">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete this {{ $itemName }}?</h1>
            </div>
            <div class="modal-body">
                <p class="text-center text-secondary">{{ $itemDescription }}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <x-ui.button ghostButton class="cancel-button" data-bs-dismiss="modal" aria-label="Close">
                    Cancel
                </x-ui.button>
                <form action="{{ $deleteRoute }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-ui.button class="delete-button" type="submit">
                        Delete
                    </x-ui.button>
                </form>
            </div>
        </div>
    </div>
</div>
