/* 
 Created on : 08-Nov-2017, 09:41:56
 Author     : Chris Muiruri @chrismuiruri_
 */
var chatz = [{
        "path": "intro",
        "messages": [{
                "text": "selam Ercu naber!",
                "author": "ConvoJs"
            },
            {
                "text": "ercu sonucu soyle bakalım 1 + 1?",
                "author": "ConvoJs"
            }
        ],
        "choices": [
            {
                "path": "block1",
                "text": "Meh",
                "type": "input"
            },
            {
                "path": "block1",
                "text": "Meh",
                "type": "button",
                "expected": "2",
                "pathTrue": "block1-correct",
                "pathFalse": "block1-wrong"
            }
        ]
    }, {
        "path": "block1-correct",
        "messages": [{
                "text": "Aferim hadi işe git bakalım",
                "author": "ConvoJs"
            }
        ],
        "choices": [{
                "path": "block2",
                "text": "Continue",
                "write": false
            }
        ]
    }, {
        "path": "block1-wrong",
        "messages": [{
                "text": "Ercu bilemedin!",
                "author": "ConvoJs"
            }
        ],
        "choices": [{
                "path": "intro",
                "text": "Tekrar dene bakalım",
                "write": false
            }
        ]
    },{
        "path": "block2",
        "messages": [
            {
                "text": "Hadi şimdi söyle sonucu 2 + 3?",
                "author": "ConvoJs"
            }
        ],
        "choices": [
            {
                "path": "block2",
                "text": "Meh",
                "type": "input"
            },
            {
                "path": "block2",
                "text": "Meh",
                "type": "button",
                "expected": "5",
                "pathTrue": "block2-correct",
                "pathFalse": "block2-wrong"
            }
        ]
    }, {
        "path": "block2-correct",
        "messages": [{
                "text": "Fantastic! ",
                "author": "ConvoJs"
            }
        ],
        "choices": [{
                "path": "block__",
                "text": "Yeter bu kadar !",
                "write": false
            }
        ]
    }, {
        "path": "block2-wrong",
        "messages": [{
                "text": "Gene bilemedin dostum!",
                "author": "ConvoJs"
            }
        ],
        "choices": [{
                "path": "intro",
                "text": "Gene dene belki bilirsin",
                "write": false
            }
        ]
    }];

