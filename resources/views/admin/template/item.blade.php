@foreach($templates as $template)
    <div class="col-md-3">
        <div class="card">
            <img src="{{asset('templates/'.$template->thumbnail)}}" class="card-img-top" alt="image" />
            <div class="card-body pb-0">
                <h3 class="card-title">{{$template->name}}</h3>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{$template->demo_url}}" target="_blank" class="btn btn-sm btn-outline-info" title="View Demo" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Demo"><i class="bi bi-eye"></i></a>
                    </div>
                    <div class="col text-center">
                        <a href="{{route('templates.edit', $template->id)}}" class="btn btn-sm btn-outline-warning" title="Edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-sm btn-outline-danger" title="Delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete" onclick="confirmDelete({{$template->id}}, 'templates')"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
