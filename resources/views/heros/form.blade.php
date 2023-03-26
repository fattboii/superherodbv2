<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form action="{{ url('/heros') }}" method="post" enctype="multipart/form-data">
<!-- security key -->
        @csrf
<!-- user inputs -->
        <div style="
        display: grid;
        place-items: center;
        ">
            <div class="form-group">
                <label for="super_hero_name">SuperHero Name</label>
                <input class="form-control" type="text" name="super_hero_name" value = "{{ isset($hero->super_hero_name)?$hero->super_hero_name:'' }}" id="super_hero_name"> 
            </div>
            <br>
            <div class="form-group">
                <label for="real_name">Real Name</label>
                <input class = "form-control" type="text" name="real_name" value = "{{ isset($hero->real_name)?$hero->real_name:'' }}" id="real_name"> 
            </div>
            <br>
            <div class="form-group">
                <label for="comments">Comments</label>
                <input class="form-control" type="text" name="comments" value = "{{ isset($hero->comments)?$hero->comments:'' }}" id="comments">
            </div>
            <br>
<!-- buttons -->
            <div class="form-group">
                <label for="photo">Picture</label>
                @if(isset($hero->photo))
                    <img src="{{ asset('storage').'/'.$hero -> photo }}" alt="{{ $hero -> super_hero_name . ' Photo'}}" width = "100" height="100">
                @endif
                <input class="form-control" type="file" name="photo" id="photo">
            </div> <br>
            <div class="btn-group-vertical">
<!-- confirm button -->
            <input class = "btn btn-success btn-lg" type="submit" value="Save" class="send_btn">
<!-- Returns to the home page -->
            <a href="{{ url('heros') }}" class = "btn btn-danger btn-lg">Return</a>
            </div>
            
        </div>
    </form>
</body>
</html>