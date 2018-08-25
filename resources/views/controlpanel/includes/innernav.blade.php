<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/controlpanel/dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/controlpanel/questions') }}">
                    <span data-feather="file"></span>
                    All Questions
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/controlpanel/answers') }}">Answers</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/controlpanel/answer-structures') }}">Answer Structures</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/controlpanel/answer-metadatas') }}">Answer Type Metadata</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/controlpanel/users') }}">Users</a>
            </li>
        </ul>
    </div>
</nav>
