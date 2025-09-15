
<div>
    <form action="{{route('courses.store')}}" method="post">
        @csrf
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