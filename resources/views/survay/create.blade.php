<!DOCTYPE html>
<html lang="en" dir='rtl'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البوصلة</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64,">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Inter', 'Noto Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            border-bottom: 1px solid #e7edf3;
            padding: 1rem 2rem;
            background-color: #fff;
        }

        .header h2 {
            color: #0e141b;
            font-weight: bold;
            margin: 0;
        }

        .progress-bar {
            height: 0.5rem;
            border-radius: 0.25rem;
        }

        .progress-container {
            background-color: #e9980a !important;
            border-radius: 0.25rem;
        }
span{
  margin: 0 6px;
}
        .question-text {
            color: #0e141b;
            font-weight: bold;
            padding: 1rem 0;
        }

        .radio-label {
            display: flex;
            align-items: center;
            padding: 1rem;
            border: 1px solid  #e9980a !important;
            border-radius: 0.5rem;
            cursor: pointer;
            width: 100%;
        }

        .radio-label:hover {
            border-color:  #e9980a !important;
        }

        .radio-input {
            margin-right: 1rem;
            accent-color: #1980e6;
        }

        .btn-primary {
            background-color: #1980e6;
            border-color: #1980e6;
        }

        .btn-primary:hover {
            background-color:  #e9980a !important;;
            border-color: #e9980a !important;;
        }
        .form-check-input:checked {
    background-color: #e9980a !important;
    border-color: #e9980a;
}
.card{
  margin: 12px;
  padding: 12px
}
    </style>
</head>

<body>
    <div class="container-fluid d-flex flex-column min-vh-100">
        <header class="header d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
              
                <h2>البوصلة</h2>
            </div>
        </header>
        <main class="flex-grow-1 d-flex justify-content-center align-items-center py-5">
            <div  style="max-width: 512px;">
               
                   
                <form action="{{ route('survay.store') }}" method="POST">
        @csrf
       
        @foreach ($questions as $question)
        <div class="card">
            <div class="style question-container">
                <label class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">{{ $question->content }}</label>
                @foreach ($question->options as $option)
                    <div class="input-container">
                        <input type="radio"  class="radio-input form-check-input"  name="answers[{{ $loop->parent->index }}][option_id]" value="{{ $option->id }}" id="option{{ $option->id }}">
                        <label for="option{{ $option->id }}" class="text-[#0e141b] text-sm font-medium">{{ $option->option_text }}</label>
                    </div>
                @endforeach
                <input type="hidden" name="answers[{{ $loop->index }}][question_id]" value="{{ $question->id }}">
            </div>
            </div>
        @endforeach

        <div class="submit-button">
            <button type="submit" class="btn btn-primary">تسليم الإجابة</button>
        </div>
    </form>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
