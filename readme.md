# Mu Bootstrap Block Theme

This block theme is a experimental theme to demo how to use WP core blocks to build a theme layout with Bootstrap.

## Why?
建立這個主題是出於個人好奇，主要是想了解建造 Block theme 的基礎知識及「如何使用 Bootstrap 框架達成全站編輯」的初步探索。

## How
為求簡單，使用了內建的群組區塊(wp:group)和欄位區塊(wp:columns)來建立容器 (container, rows, columns)。

## Conclusion
使用內建區塊的效果並不理想，因為內建的容器型區塊 (InnerBlock)，會產生額外的巢狀容器元素，造成 Bootstrap 的樣式受到影響。