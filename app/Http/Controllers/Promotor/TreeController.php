<?php

namespace App\Http\Controllers\Promotor;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\SponsorTree;

class TreeController extends Controller
{
    //promoter tree
    public function index(){
        $id = Auth::user()->id;
        $node_1_user_id = 0;
        $node_1_bc = 0;
        
        $node_11_user_id = 0;
        $node_11_bc = 0;

        $node_111_user_id = 0;
        $node_111_bc = 0;

        $node_112_user_id = 0;
        $node_112_bc = 0;

        $node_1111_user_id = 0;
        $node_1111_bc = 0;

        $node_1112_user_id = 0;
        $node_1112_bc = 0;

        $node_1121_user_id = 0;
        $node_1121_bc = 0;

        $node_1122_user_id = 0;
        $node_1122_bc = 0;
        
        $node_12_user_id = 0;
        $node_12_bc = 0;

        $node_121_user_id = 0;
        $node_121_bc = 0;

        $node_122_user_id = 0;
        $node_122_bc = 0;

        $node_1211_user_id = 0;
        $node_1211_bc = 0;

        $node_1212_user_id = 0;
        $node_1212_bc = 0;

        $node_1221_user_id = 0;
        $node_1221_bc = 0;

        $node_1222_user_id = 0;
        $node_1222_bc = 0;

        if($id){
            //return $id;
            $id = 1;
            //get left right of root
            $root = SponsorTree::where('user_id', $id)
                ->where('bc', 1)
                ->first();
            
            $node_1_user_id = $root->user_id;
            $node_1_bc = $root->bc;



            //dd($root);
            //check if root has left and right, node 1
            $tree_left = $root->left;
            $tree_right = $root->right;
            
            if($tree_left == 0){
            }
            else{
                //get left tree details
                $root_left = $this->getTreeDetails($tree_left);
                $node_11_user_id = $root_left->user_id;
                $node_11_bc = $root_left->bc;

                //dd($root_left);
                $tree_11_left = $root_left->left;
                $tree_11_right = $root_left->right;
                //dd($tree_11_right);

                //left level 3 checking
                if($tree_11_left == 0){}
                else{
                    //get left tree details
                    $root_left = $this->getTreeDetails($tree_11_left);
                    
                    $node_111_user_id = $root_left->user_id;
                    $node_111_bc = $root_left->bc;


                    $tree_111_left = $root_left->left;
                    $tree_111_right = $root_left->right;

                    if($tree_111_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_111_left);
                        $node_1111_user_id = $root_left->user_id;
                        $node_1111_bc = $root_left->bc;
                    }
                    
                    if($tree_111_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_111_right);
                        $node_1112_user_id = $root_left->user_id;
                        $node_1112_bc = $root_left->bc;
                    }
                }

                if($tree_11_right == 0){}
                else{
                    //get left tree details
                    $root_right = $this->getTreeDetails($tree_11_right);
                    $node_112_user_id = $root_right->user_id;
                    $node_112_bc = $root_right->bc;
                    //dd($root_right);

                    $tree_112_left = $root_right->left;
                    $tree_112_right = $root_right->right;

                    if($tree_112_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_111_left);
                        $node_1121_user_id = $root_left->user_id;
                        $node_1121_bc = $root_left->bc;
                    }
                    
                    if($tree_112_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_112_right);
                        $node_1122_user_id = $root_left->user_id;
                        $node_1122_bc = $root_left->bc;
                    }

                }
            }

            if($tree_right == 0){}
            else{
                //get left tree details
                $root_right = $this->getTreeDetails($tree_right);
                $node_12_user_id = $root_right->user_id;
                $node_12_bc = $root_right->bc;
                //dd($root_right);
                $tree_12_left = $root_right->left;
                $tree_12_right = $root_right->right;

                //left level 3 checking
                if($tree_12_left == 0){}
                else{
                    //get left tree details
                    $root_left = $this->getTreeDetails($tree_12_left);
                    
                    $node_121_user_id = $root_left->user_id;
                    $node_121_bc = $root_left->bc;


                    $tree_121_left = $root_left->left;
                    $tree_121_right = $root_left->right;

                    if($tree_121_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_121_left);
                        $node_1211_user_id = $root_left->user_id;
                        $node_1211_bc = $root_left->bc;
                    }
                    
                    if($tree_121_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_121_right);
                        $node_1212_user_id = $root_left->user_id;
                        $node_1212_bc = $root_left->bc;
                    }
                }

                if($tree_12_right == 0){}
                else{
                    //get left tree details
                    $root_right = $this->getTreeDetails($tree_12_right);
                    $node_122_user_id = $root_right->user_id;
                    $node_122_bc = $root_right->bc;
                    //dd($root_right);

                    $tree_122_left = $root_right->left;
                    $tree_122_right = $root_right->right;

                    if($tree_122_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_122_left);
                        $node_1221_user_id = $root_left->user_id;
                        $node_1221_bc = $root_left->bc;
                    }
                    
                    if($tree_122_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_122_right);
                        $node_1222_user_id = $root_left->user_id;
                        $node_1222_bc = $root_left->bc;
                    }

                }
            }
        }
        else{
            //return view('promotor.tree');
        }

        return view('promotor.tree', [
            'node_1_user_id' => $node_1_user_id,
            'node_1_bc' => $node_1_bc,
        
            'node_11_user_id' => $node_11_user_id,
            'node_11_bc' => $node_11_bc,

            'node_111_user_id' => $node_111_user_id,
            'node_111_bc' => $node_111_bc,

            'node_112_user_id' => $node_112_user_id,
            'node_112_bc' => $node_112_bc,

            'node_1111_user_id' => $node_1111_user_id,
            'node_1111_bc' => $node_1111_bc,

            'node_1112_user_id' => $node_1112_user_id,
            'node_1112_bc' => $node_1112_bc,

            'node_1121_user_id' => $node_1121_user_id,
            'node_1121_bc' => $node_1121_bc,

            'node_1122_user_id' => $node_1122_user_id,
            'node_1122_bc' => $node_1122_bc,
            
            'node_12_user_id' => $node_12_user_id,
            'node_12_bc' => $node_12_bc,

            'node_121_user_id' => $node_121_user_id,
            'node_121_bc' => $node_121_bc,

            'node_122_user_id' => $node_122_user_id,
            'node_122_bc' => $node_122_bc,

            'node_1211_user_id' => $node_1211_user_id,
            'node_1211_bc' => $node_1211_bc,

            'node_1212_user_id' => $node_1212_user_id,
            'node_1212_bc' => $node_1212_bc,

            'node_1221_user_id' => $node_1221_user_id,
            'node_1221_bc' => $node_1221_bc,

            'node_1222_user_id' => $node_1222_user_id,
            'node_1222_bc' => $node_1222_bc  
        ]);
       
    }

    public function getTreeDetails($tree_id){
        $root = SponsorTree::where('id', $tree_id)
                ->first();

        return $root;
    }

    
}
