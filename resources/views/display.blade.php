<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center; margin: 100px 200px;" class="container">
    @foreach($categories as $category)
        <div style="display: flex; flex-flow: row;">
            <div class="category">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="category{{ $category->id }}"
                           value="{{ $category->id }}">
                    <label class="form-check-label" for="category{{ $category->id }}">{{ $category->name }}</label>
                </div>
            </div>
            <div style="display: flex; flex-flow: row;" class="form-box">
                @foreach($category->forms as $formData)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="form{{ $formData->id }}" value="{{ $formData->id }}">
                        <label class="form-check-label" for="form{{ $formData->id }}">{{ $formData->value }}</label>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
</body>
</html>