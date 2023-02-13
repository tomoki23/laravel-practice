<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>トップページ</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  {{-- ヘッダー --}}
  <header>
    <div class="w-full p-8 bg-black flex justify-between">
      <h1 class="text-white">TODOアプリ</h1>
      <nav>
        <ul class="text-white flex">
          <li class="ml-8"><a href="#">ナビ1</a></li>
          <li class="ml-8"><a href="#">ナビ2</a></li>
        </ul>
      </nav>
    </div>
  </header>
  {{-- ヘッダーここまで --}}

  {{-- メイン --}}
  <main>
    <div class="w-full mt-12">
      {{-- TODO追加フォーム --}}
      <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="w-4/3 flex justify-center">
          <input type="text" name="todo" placeholder="タスクを入力してください" class="border border-black w-[220px] px-2 rounded-md">
          <button type="submit" name="send" class="ml-4 bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2">追加</button>
        </div>
      </form>
      {{-- TODO追加フォームここまで --}}
      <div>
        <table class="w-1/2 mt-12 m-auto">
          <thead>
            <tr>
              <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                タスク
              </th>
              <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                削除
              </th>
            </tr>
          </thead>
          @foreach ($tasks as $task)
          <tbody>
            <tr class="text-gray-700">
              <td class="border-b-2 p-4 dark:border-dark-5">
                {{ $task['todo'] }}
              </td>
              <td class="border-b-2 p-4 dark:border-dark-5 flex justify-center">
                <button type="submit" class="bg-red-600 hover:bg-red-500 text-white rounded px-4 py-2">削除</button>
              </td>
          </tbody>
      @endforeach
        </table>
      </div>
    </div>
  </main>
  {{-- メインここまで --}}
</body>
</html>
