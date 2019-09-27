@role('root')
    <p>Я и есть РУТ!!!</p>
@endrole


@ability('admin,root', 'create-post,edit-user')
    <p>У меня роли Админ и рут</p>
@endability

@role('expert')
    <p>Эй чувак я являюсь Экспертом</p>
@endrole