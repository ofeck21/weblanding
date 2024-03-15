<div class="row">
    @foreach ($faqs as $faq)
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-tools float-end">
                    <a href="{{route('faqs.edit', $faq->id)}}" class="btn btn-sm btn-outline-warning" title="Edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit"><i class="bi bi-pencil-square"></i></a>
                    <button class="btn btn-sm btn-outline-danger" title="Delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete" onclick="confirmDelete({{$faq->id}}, 'faqs')"><i class="bi bi-trash"></i></button>
                </div>
                <strong>{{$faq->question}}</strong>
            </div>
            <div class="card-body mt-3">
                <p class="card-text">{{$faq->answer}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
