
<div>
    <form action="{{route('courses.update',$course->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class=" mt-3">
            <label for="">Course Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</div> 