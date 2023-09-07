<h1>Create a User</h1>

<form action="store" method="POST">
    @csrf
    <label>Name : </label><input name="name" type="text"/><br/>
    <label>Phone : </label><input name="phone" type="text"/><br/>
    <label>Email : </label><input name="email" type="text"/><br/>
    <label>Age : </label><input name="age" type="number"/><br/>
    <input name="submit" type="submit" value="Create"/>

</form>
