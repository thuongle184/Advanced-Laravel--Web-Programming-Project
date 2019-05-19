@if($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <div>{!! $error !!}</div>
    @endforeach
  </div>
@endif


<form
  action="{!! $action !!}"
  method="post"
  enctype="multipart/form-data"
  class="my-margin-top-40"
>
  @csrf

  @if($dish['id'] != NULL)
    @method('PATCH')
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_name">Name of the dish:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="dish_name"
        type="text"
        class="form-control"
        name="name"
        value="{!! old ('name',isset($dish)?$dish['name']:NULL) !!}"
      >
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_dish_type_id">Dish category:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="dish_type_id" class="form-control" id="dish_dish_type_id">
        
        @foreach ($dishTypes as $dishType)
          <option
            value="{!! $dishType['id'] !!}"
            {!!
                old (
                  'dish_type_id',
                  isset($dish) && $dish['dish_type_id'] == $dishType['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $dishType['label'] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>
  

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_description">Description:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <textarea
        rows="4"
        id="dish_description"
        class="form-control"
        name="description"
        value="{!! old ('price',isset($dish)?$dish['price']:NULL) !!}"
      ></textarea>
    </div>
  </div>
  

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_price">Price:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="dish_price"
        type="number"
        class="form-control"
        name="price"
        value="{!! old ('price',isset($dish)?$dish['price']:NULL) !!}"
      >
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_is_available">Dish is available?<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        type="checkbox"
        id="dish_is_available"
        name="is_available"
        checked="{!! old ('is_available', isset($dish) ? $dish['is_available'] : 'checked') !!}"
        value="1"
      >
    </div>
  </div>


  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="dish_image">Upload a picture<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input type="file" id="dish_image" name="image">
    </div>
  </div>


  @isset($dish['image'])

    <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label>Current picture<label>
      </div>
      
      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      </div>
    </div>

  @endisset


  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('dishes.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of dishes</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>
    </div>
  </div>

</form>