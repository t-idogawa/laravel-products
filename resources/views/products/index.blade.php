<a href="{{ route('products.create') }}">新規作成</a>

<table>
    <tr>
        <th>ID</th>
        <th>商品画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>在庫数</th>
        <th>メーカー名</th>
        <th>action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->image_path }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->company_id }}</td> <!-- company->nameを表示させる -->
        <td>
            <a href="{{ route('products.show', $product->id) }}">詳細</a>
            <a href="{{ route('products.edit', $product->id) }}">編集</a>
        </td>
    </tr>
    @endforeach
</table>