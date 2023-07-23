<div>
    <h2>新規作成</h2>
</div>
<div>
    <a href="{{ route('products.index') }}">戻る</a>
</div>

<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">商品名:</label>
        <input type="text" name="name" placeholder="商品名">
    </div>
    <div>
        <label for="price">価格:</label>
        <input type="number" name="price" placeholder="価格">
    </div>
    <div>
        <label for="stock">在庫数:</label>
        <input type="number" name="stock" placeholder="在庫数">
    </div>
    <div>
        <label for="company_name">メーカー名:</label>
        <select name="company_id">
            @foreach ($companies as $company)
            <option value="{{ $company_id }}">{{ $company->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="image_path">商品画像:</label>
        <input type="file" name="image_path" id="image_path">
    </div>
    <div>
        <label for="comment">コメント:</label>
        <textarea name="comment" id="comment"></textarea>
    </div>
    <div>
        <button type="submit">登録</button>
    </div>
</form>