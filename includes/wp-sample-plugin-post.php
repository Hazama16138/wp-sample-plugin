<?php

	/**
	* Class Post Page
	*
	* @author  Kazuya Takami
	* @version 1.0.0
	* @since   1.0.0
	*/
	class Sample_Plugin_Post {
		/**
		* Constructor
		*
		* @version 1.0.0
		* @since   1.0.0
		*/
		public function __construct() {
			$this->page_render();
		}
		
		/**
		* Rendaring Page
		*
		* @version 1.0.0
		* @since   1.0.0
		*/
		private function page_render() {
			$html = '<div class="wrap">';
			$html.= '<h1 class="wp-heading-inline">サンプル登録</h1>';
			$html.= '</div>';
			
			echo $html;
			
			$html  = '<form method="post" action="">';
			$html .= '<input type="hidden" name="sample_id" value="">';
			
			$html .= '<h2>バナー設定</h2>';
			$html .= '<table>';
			$html .= '<tr>';
			$html .= '<th>画像のURL(必須)</th>';
			$html .= '<td>';
			$html .= '<img src="' . plugins_url('../images/no-image.png', __FILE__) . '" width="200" height=""><br>';
			$html .= '<input type="text"><br>';
			$html .= '<button>画像を選択</button>';
			$html .= '</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>画像 ALT属性 (必須)</th>';
			$html .= '<td><input type="text"><br>alt属性のテキストを入力します</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>リンク URL</th>';
			$html .= '<td><input type="text"><br>URLを入力すると、バナー画像にリンクを設定することができます。</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>新規タブで開く</th>';
			$html .= '<td><input type="checkbox">リンクを新規タブで開く</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>Class名</th>';
			$html .= '<td><input type="text"><br>バナー画像にクラス（複数可）を追加することができます。「class=""」は不要です。複数設定する場合は、半数スペースで区切ります。</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>ID名</th>';
			$html .= '<td><input type="text"><br>バナー画像にIDを追加することができます。「id=""」は不要です。</td>';
			$html .= '</tr>';
			
			$html .= '</table>';
			
			$html .= '<h2>表示設定</h2>';
			$html .= '<table>';
			$html .= '<tr>';
			$html .= '<th>表示方法(必須)</th>';
			$html .= '<td>';
			$html .= '<input type="radio">下記の下に表示<br>';
			$html .= '<input type="radio">ショートコードで表示';
			$html .= '</td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>絞り込み</th>';
			$html .= '<td>';
			$html .= '<input type="checkbox">カテゴリーで絞り込み';
			$html .= 'チェックされていない場合は、全てに無条件で表示され、「表示するカテゴリ」項目の設定は無視されます。';
			$html .= '<td>';
			$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<th>表示するカテゴリ(必須)</th>';
			$html .= '<td>';
			$html .= '<input type="checkbox">カテゴリーで絞り込み';
			$html .= '選択したカテゴリーが投稿に紐づいている場合のみ画像が表示されます。';
			$html .= '</td>';
			$html .= '</tr>';
			
			$html .= '</form>';
			$html .= '</table>';
			
			
			echo $html;
		}
	}