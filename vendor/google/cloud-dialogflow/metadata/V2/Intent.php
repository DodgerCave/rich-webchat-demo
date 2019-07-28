<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Intent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa4380a27676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f696e74656e742e70726f746f121a676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76321a28676f6f676c652f636c6f75642f646961" .
            "6c6f67666c6f772f76322f636f6e746578742e70726f746f1a23676f6f67" .
            "6c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f74" .
            "6f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e7072" .
            "6f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f" .
            "746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b" .
            "2e70726f746f1a1c676f6f676c652f70726f746f6275662f737472756374" .
            "2e70726f746f228c210a06496e74656e74120c0a046e616d651801200128" .
            "0912140a0c646973706c61795f6e616d6518022001280912460a0d776562" .
            "686f6f6b5f737461746518062001280e322f2e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e576562686f6f6b" .
            "537461746512100a087072696f7269747918032001280512130a0b69735f" .
            "66616c6c6261636b18042001280812130a0b6d6c5f64697361626c656418" .
            "1320012808121b0a13696e7075745f636f6e746578745f6e616d65731807" .
            "20032809120e0a066576656e7473180820032809124b0a10747261696e69" .
            "6e675f7068726173657318092003280b32312e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e547261696e696e" .
            "67506872617365120e0a06616374696f6e180a20012809123c0a0f6f7574" .
            "7075745f636f6e7465787473180b2003280b32232e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e76322e436f6e7465787412160a0e72" .
            "657365745f636f6e7465787473180c2001280812400a0a706172616d6574" .
            "657273180d2003280b322c2e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e76322e496e74656e742e506172616d65746572123c0a086d" .
            "65737361676573180e2003280b322a2e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e496e74656e742e4d65737361676512570a" .
            "1a64656661756c745f726573706f6e73655f706c6174666f726d73180f20" .
            "03280e32332e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e742e4d6573736167652e506c6174666f726d12210a19" .
            "726f6f745f666f6c6c6f7775705f696e74656e745f6e616d651810200128" .
            "0912230a1b706172656e745f666f6c6c6f7775705f696e74656e745f6e61" .
            "6d6518112001280912530a14666f6c6c6f7775705f696e74656e745f696e" .
            "666f18122003280b32352e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e496e74656e742e466f6c6c6f777570496e74656e7449" .
            "6e666f1ad3020a0e547261696e696e67506872617365120c0a046e616d65" .
            "18012001280912440a047479706518022001280e32362e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e547261" .
            "696e696e675068726173652e5479706512450a0570617274731803200328" .
            "0b32362e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "2e496e74656e742e547261696e696e675068726173652e5061727412190a" .
            "1174696d65735f61646465645f636f756e741804200128051a4e0a045061" .
            "7274120c0a047465787418012001280912130a0b656e746974795f747970" .
            "65180220012809120d0a05616c69617318032001280912140a0c75736572" .
            "5f646566696e6564180420012808223b0a045479706512140a1054595045" .
            "5f554e5350454349464945441000120b0a074558414d504c45100112100a" .
            "0854454d504c41544510021a0208011aac010a09506172616d6574657212" .
            "0c0a046e616d6518012001280912140a0c646973706c61795f6e616d6518" .
            "0220012809120d0a0576616c756518032001280912150a0d64656661756c" .
            "745f76616c756518042001280912200a18656e746974795f747970655f64" .
            "6973706c61795f6e616d6518052001280912110a096d616e6461746f7279" .
            "180620012808120f0a0770726f6d707473180720032809120f0a0769735f" .
            "6c6973741808200128081aaf150a074d657373616765123f0a0474657874" .
            "18012001280b322f2e676f6f676c652e636c6f75642e6469616c6f67666c" .
            "6f772e76322e496e74656e742e4d6573736167652e54657874480012410a" .
            "05696d61676518022001280b32302e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e76322e496e74656e742e4d6573736167652e496d61" .
            "6765480012500a0d717569636b5f7265706c69657318032001280b32372e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74" .
            "656e742e4d6573736167652e517569636b5265706c6965734800123f0a04" .
            "6361726418042001280b322f2e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e496e74656e742e4d6573736167652e4361726448" .
            "00122a0a077061796c6f616418052001280b32172e676f6f676c652e7072" .
            "6f746f6275662e537472756374480012560a1073696d706c655f72657370" .
            "6f6e73657318072001280b323a2e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e496e74656e742e4d6573736167652e53696d70" .
            "6c65526573706f6e7365734800124a0a0a62617369635f63617264180820" .
            "01280b32342e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e496e74656e742e4d6573736167652e426173696343617264480012" .
            "4d0a0b73756767657374696f6e7318092001280b32362e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d6573" .
            "736167652e53756767657374696f6e734800125b0a136c696e6b5f6f7574" .
            "5f73756767657374696f6e180a2001280b323c2e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76322e496e74656e742e4d6573736167" .
            "652e4c696e6b4f757453756767657374696f6e4800124c0a0b6c6973745f" .
            "73656c656374180b2001280b32352e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e76322e496e74656e742e4d6573736167652e4c6973" .
            "7453656c656374480012540a0f6361726f7573656c5f73656c656374180c" .
            "2001280b32392e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e76322e496e74656e742e4d6573736167652e4361726f7573656c53656c" .
            "656374480012450a08706c6174666f726d18062001280e32332e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e" .
            "4d6573736167652e506c6174666f726d1a140a0454657874120c0a047465" .
            "78741801200328091a360a05496d61676512110a09696d6167655f757269" .
            "180120012809121a0a126163636573736962696c6974795f746578741802" .
            "200128091a340a0c517569636b5265706c696573120d0a057469746c6518" .
            "012001280912150a0d717569636b5f7265706c6965731802200328091aad" .
            "010a0443617264120d0a057469746c6518012001280912100a0873756274" .
            "69746c6518022001280912110a09696d6167655f75726918032001280912" .
            "470a07627574746f6e7318042003280b32362e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e4d657373616765" .
            "2e436172642e427574746f6e1a280a06427574746f6e120c0a0474657874" .
            "18012001280912100a08706f73746261636b1802200128091a4c0a0e5369" .
            "6d706c65526573706f6e736512160a0e746578745f746f5f737065656368" .
            "180120012809120c0a0473736d6c18022001280912140a0c646973706c61" .
            "795f746578741803200128091a660a0f53696d706c65526573706f6e7365" .
            "7312530a1073696d706c655f726573706f6e73657318012003280b32392e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74" .
            "656e742e4d6573736167652e53696d706c65526573706f6e73651aef020a" .
            "09426173696343617264120d0a057469746c6518012001280912100a0873" .
            "75627469746c6518022001280912160a0e666f726d61747465645f746578" .
            "74180320012809123f0a05696d61676518042001280b32302e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d" .
            "6573736167652e496d616765124c0a07627574746f6e7318052003280b32" .
            "3b2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e49" .
            "6e74656e742e4d6573736167652e4261736963436172642e427574746f6e" .
            "1a99010a06427574746f6e120d0a057469746c6518012001280912620a0f" .
            "6f70656e5f7572695f616374696f6e18022001280b32492e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d65" .
            "73736167652e4261736963436172642e427574746f6e2e4f70656e557269" .
            "416374696f6e1a1c0a0d4f70656e557269416374696f6e120b0a03757269" .
            "1801200128091a1b0a0a53756767657374696f6e120d0a057469746c6518" .
            "01200128091a590a0b53756767657374696f6e73124a0a0b737567676573" .
            "74696f6e7318012003280b32352e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e496e74656e742e4d6573736167652e53756767" .
            "657374696f6e1a3a0a114c696e6b4f757453756767657374696f6e12180a" .
            "1064657374696e6174696f6e5f6e616d65180120012809120b0a03757269" .
            "1802200128091a9d020a0a4c69737453656c656374120d0a057469746c65" .
            "18012001280912490a056974656d7318022003280b323a2e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e742e4d65" .
            "73736167652e4c69737453656c6563742e4974656d1ab4010a044974656d" .
            "12470a04696e666f18012001280b32392e676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e76322e496e74656e742e4d6573736167652e53" .
            "656c6563744974656d496e666f120d0a057469746c651802200128091213" .
            "0a0b6465736372697074696f6e180320012809123f0a05696d6167651804" .
            "2001280b32302e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e76322e496e74656e742e4d6573736167652e496d6167651a96020a0e43" .
            "61726f7573656c53656c656374124d0a056974656d7318012003280b323e" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e" .
            "74656e742e4d6573736167652e4361726f7573656c53656c6563742e4974" .
            "656d1ab4010a044974656d12470a04696e666f18012001280b32392e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e" .
            "742e4d6573736167652e53656c6563744974656d496e666f120d0a057469" .
            "746c6518022001280912130a0b6465736372697074696f6e180320012809" .
            "123f0a05696d61676518042001280b32302e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e496e74656e742e4d6573736167652e" .
            "496d6167651a2f0a0e53656c6563744974656d496e666f120b0a036b6579" .
            "18012001280912100a0873796e6f6e796d7318022003280922a0010a0850" .
            "6c6174666f726d12180a14504c4154464f524d5f554e5350454349464945" .
            "441000120c0a0846414345424f4f4b100112090a05534c41434b1002120c" .
            "0a0854454c454752414d100312070a034b494b100412090a05534b595045" .
            "100512080a044c494e45100612090a055649424552100712150a11414354" .
            "494f4e535f4f4e5f474f4f474c45100812130a0f474f4f474c455f48414e" .
            "474f555453100b42090a076d6573736167651a570a12466f6c6c6f777570" .
            "496e74656e74496e666f121c0a14666f6c6c6f7775705f696e74656e745f" .
            "6e616d6518012001280912230a1b706172656e745f666f6c6c6f7775705f" .
            "696e74656e745f6e616d6518022001280922740a0c576562686f6f6b5374" .
            "617465121d0a19574542484f4f4b5f53544154455f554e53504543494649" .
            "4544100012190a15574542484f4f4b5f53544154455f454e41424c454410" .
            "01122a0a26574542484f4f4b5f53544154455f454e41424c45445f464f52" .
            "5f534c4f545f46494c4c494e471002229f010a124c697374496e74656e74" .
            "7352657175657374120e0a06706172656e7418012001280912150a0d6c61" .
            "6e67756167655f636f6465180220012809123b0a0b696e74656e745f7669" .
            "657718032001280e32262e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e496e74656e745669657712110a09706167655f73697a" .
            "6518042001280512120a0a706167655f746f6b656e18052001280922630a" .
            "134c697374496e74656e7473526573706f6e736512330a07696e74656e74" .
            "7318012003280b32222e676f6f676c652e636c6f75642e6469616c6f6766" .
            "6c6f772e76322e496e74656e7412170a0f6e6578745f706167655f746f6b" .
            "656e18022001280922740a10476574496e74656e7452657175657374120c" .
            "0a046e616d6518012001280912150a0d6c616e67756167655f636f646518" .
            "0220012809123b0a0b696e74656e745f7669657718032001280e32262e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e7465" .
            "6e745669657722ad010a13437265617465496e74656e7452657175657374" .
            "120e0a06706172656e7418012001280912320a06696e74656e7418022001" .
            "280b32222e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "322e496e74656e7412150a0d6c616e67756167655f636f64651803200128" .
            "09123b0a0b696e74656e745f7669657718042001280e32262e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e76322e496e74656e745669" .
            "657722ce010a13557064617465496e74656e745265717565737412320a06" .
            "696e74656e7418012001280b32222e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e76322e496e74656e7412150a0d6c616e6775616765" .
            "5f636f6465180220012809122f0a0b7570646174655f6d61736b18032001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "123b0a0b696e74656e745f7669657718042001280e32262e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74566965" .
            "7722230a1344656c657465496e74656e7452657175657374120c0a046e61" .
            "6d6518012001280922a4020a194261746368557064617465496e74656e74" .
            "7352657175657374120e0a06706172656e74180120012809121a0a10696e" .
            "74656e745f62617463685f757269180220012809480012460a13696e7465" .
            "6e745f62617463685f696e6c696e6518032001280b32272e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e496e74656e74426174" .
            "6368480012150a0d6c616e67756167655f636f6465180420012809122f0a" .
            "0b7570646174655f6d61736b18052001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b123b0a0b696e74656e745f766965" .
            "7718062001280e32262e676f6f676c652e636c6f75642e6469616c6f6766" .
            "6c6f772e76322e496e74656e7456696577420e0a0c696e74656e745f6261" .
            "74636822510a1a4261746368557064617465496e74656e7473526573706f" .
            "6e736512330a07696e74656e747318012003280b32222e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e496e74656e7422600a19" .
            "426174636844656c657465496e74656e747352657175657374120e0a0670" .
            "6172656e7418012001280912330a07696e74656e747318022003280b3222" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e496e" .
            "74656e7422420a0b496e74656e74426174636812330a07696e74656e7473" .
            "18012003280b32222e676f6f676c652e636c6f75642e6469616c6f67666c" .
            "6f772e76322e496e74656e742a3f0a0a496e74656e7456696577121b0a17" .
            "494e54454e545f564945575f554e535045434946494544100012140a1049" .
            "4e54454e545f564945575f46554c4c100132d8080a07496e74656e747312" .
            "9d010a0b4c697374496e74656e7473122e2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e4c697374496e74656e747352657175" .
            "6573741a2f2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e4c697374496e74656e7473526573706f6e7365222d82d3e4930227" .
            "12252f76322f7b706172656e743d70726f6a656374732f2a2f6167656e74" .
            "7d2f696e74656e7473128c010a09476574496e74656e74122c2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e476574496e7465" .
            "6e74526571756573741a222e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e76322e496e74656e74222d82d3e493022712252f76322f7b" .
            "6e616d653d70726f6a656374732f2a2f6167656e742f696e74656e74732f" .
            "2a7d129a010a0c437265617465496e74656e74122f2e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e76322e437265617465496e74656e" .
            "74526571756573741a222e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e496e74656e74223582d3e493022f22252f76322f7b70" .
            "6172656e743d70726f6a656374732f2a2f6167656e747d2f696e74656e74" .
            "733a06696e74656e7412a1010a0c557064617465496e74656e74122f2e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e55706461" .
            "7465496e74656e74526571756573741a222e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e496e74656e74223c82d3e493023632" .
            "2c2f76322f7b696e74656e742e6e616d653d70726f6a656374732f2a2f61" .
            "67656e742f696e74656e74732f2a7d3a06696e74656e741286010a0c4465" .
            "6c657465496e74656e74122f2e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e44656c657465496e74656e74526571756573741a" .
            "162e676f6f676c652e70726f746f6275662e456d707479222d82d3e49302" .
            "272a252f76322f7b6e616d653d70726f6a656374732f2a2f6167656e742f" .
            "696e74656e74732f2a7d12a8010a124261746368557064617465496e7465" .
            "6e747312352e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e4261746368557064617465496e74656e7473526571756573741a1d" .
            "2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22" .
            "3c82d3e493023622312f76322f7b706172656e743d70726f6a656374732f" .
            "2a2f6167656e747d2f696e74656e74733a62617463685570646174653a01" .
            "2a12a8010a12426174636844656c657465496e74656e747312352e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e426174636844" .
            "656c657465496e74656e7473526571756573741a1d2e676f6f676c652e6c" .
            "6f6e6772756e6e696e672e4f7065726174696f6e223c82d3e49302362231" .
            "2f76322f7b706172656e743d70726f6a656374732f2a2f6167656e747d2f" .
            "696e74656e74733a626174636844656c6574653a012a429a010a1e636f6d" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632420b49" .
            "6e74656e7450726f746f50015a44676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6469" .
            "616c6f67666c6f772f76323b6469616c6f67666c6f77f80101a202024446" .
            "aa021a476f6f676c652e436c6f75642e4469616c6f67666c6f772e563262" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

