#初回ログイン
Email Address : test 
Password : password 

・テストで作っていたのを組み合わせているので、ディレクトリ構成・DB構成悪いです。
・マイグレーションとシーダー用意してます。

～～～～～機能一覧～～～～～～～～～～～～

＜部門マスタ＞

「一覧表示」
・基本的なCRUD処理
・部門コード、表示順のソート機能
・編集兼削除ページへ遷移（詳細画面は作ってません）

「新規登録」
・簡易バリデーション

「編集・削除」
・簡易で楽観的ロックつけてます。
・削除で紐づいている部門集計のテーブルも削除されます。

「編集・削除」
・簡易で楽観的ロックつけてます。
・簡易バリデーション


＜部門集計マスタ＞

「一覧表示」
・基本的なCRUD処理
・名称検索機能
・プルダウン検索機能（登録されている部門マスタから選ぶ）
・ページネーション
・編集兼削除ページへ遷移（詳細画面は作ってません）

「新規登録」
・登録時に部門マスタを選択させて親子関係を築きます。
・簡易バリデーション

「編集・削除」
・簡易で楽観的ロックつけてます。
・簡易バリデーション