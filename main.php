/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func isSymmetric(root *TreeNode) bool {

     return comp(root.Left, root.Right);
    
}

func comp(l *TreeNode, r *TreeNode) bool {
    if(l == nil && r == nil){
        return true;
    }
    if(l== nil || r == nil){
        return false;
    }
    if(l.Val!=r.Val){
        return false;
    }
    return (comp(l.Left, r.Right) && comp(l.Right, r.Left));
}

