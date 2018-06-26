// Utilizando plugin InputMask. https://github.com/RobinHerbots/Inputmask
var cpfMask = new Inputmask('999.999.999-99[999]', { removeMaskOnSubmit: true, autoUnmask: true, rightAlign: false, clearMaskOnLostFocus: true, greedy :  false});
var cnpjMask = new Inputmask('99.999.999/9999-99', { removeMaskOnSubmit: true, autoUnmask: true, rightAlign: false, clearMaskOnLostFocus: true, greedy :  false});
var cepMask = new Inputmask('99999-999', { removeMaskOnSubmit: true, autoUnmask: true, rightAlign: false, clearMaskOnLostFocus: true, greedy :  false, clearIncomplete: true});
var numeroMask = new Inputmask('9', { repeat: 5, removeMaskOnSubmit: true, autoUnmask: true, rightAlign: false, clearMaskOnLostFocus: true, greedy :  false});
var telMask = new Inputmask('(99) 9999-9999', { removeMaskOnSubmit: true, autoUnmask: true, rightAlign: false, clearMaskOnLostFocus: true, greedy :  false, clearIncomplete: true});
var celMask = new Inputmask('(99) 9999-9999[9]', { removeMaskOnSubmit: true, autoUnmask: true, clearMaskOnLostFocus: true, greedy :  false, skipOptionalPartCharacter: " ", clearIncomplete: true});
var cel9Mask = new Inputmask('(99) 9-9999-9999', { removeMaskOnSubmit: true, autoUnmask: true, clearMaskOnLostFocus: true, greedy :  false, skipOptionalPartCharacter: " ", clearIncomplete: true});
