<body>
    <form action='/youtube' method="POST">
        @csrf
        <label for="url">Paste link here</label>
        <input name="url" id='url' type="text">
        <button type="submit">Submit</button>
    </form>
</body>
