@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Companies", 'route' => route('companies.create'), 'buttonLabel' => "Add a company"]
  )

@endsection


@section('content')

  @foreach($users as $user)

    @if (count($user->companies) > 0)
      <div class="my-user">
        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $user->first_name !!}{!!$user->last_name !!} {!! $user->middle_name!!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($user->companies as $company)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-company">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $company["name"] !!}
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('companies.show', $company["id"]) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('companies.edit', $company["id"]) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-company-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('companies.destroy', $company['id']) !!}"
                    >
                      <i class="far fa-trash-alt my-margin-right-12"></i>
                      <span>Delete</span>
                    </button>
                  </div>

                </div>
              </div>
            </div>

          @endforeach

        </div>

      </div>

    @endif

  @endforeach

@endsection