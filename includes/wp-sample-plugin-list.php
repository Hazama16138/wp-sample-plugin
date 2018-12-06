<?php

	/**
	* Class List Page
	*
	* @author  Kazuya Takami
	* @version 1.0.0
	* @since   1.0.0
	*/
	class Sample_Plugin_List {
		/**
		* Constructor
		*
		* @version 1.0.0
		* @since   1.0.0
		*/
		public function __construct() {
			$db = new Sample_Plugin_Admin_Db();
			$this->page_render( $db );
		}
		
		/**
		* Rendaring Page
		*
		* @version 1.0.0
		* @since   1.0.0
	 	* @param   Sample_Plugin_Admin_Db $db
		*/
		private function page_render( $db ) {
			$html = '<div class="wrap">';
			$html.= '<h1 class="wp-heading-inline">サンプル一覧</h1>';
			$html.= '<a href="" class="page-title-action">新規追加</a>';
			
			$html.= '<table>';
			$html.= '<tr>';
			$html.= '<th>画像</th><th>画像ALT属性</th><th>表示方法</th><th>絞り込み</th>';
			$html.= '</tr>';
			
			$results = $db->get_list_options();
			
			if ( $results ) {
				foreach( $results as $row ) {
					$html .= '<tr>';
					$html .= '<td>';
					$html .= $row->image_url;
					$html .= '</td>';
					$html .= '<td>';
					$html .= $row->image_alt;
					$html .= '</td>';
					$html .= '<td>';
					$html .= $row->how_display;
					$html .= '</td>';
					$html .= '<td>';
					$html .= $row->filter_category;
					$html .= '</td>';
					$html .= '</tr>';
				}
			} else {
				$html.= '<tr>';
				$html.= '<td colspan="4">登録はありません</td>';
				$html.= '</tr>';
			}
			
			$html.= '</table>';
			$html.= '</div>';
			
			echo $html;
		}
	}